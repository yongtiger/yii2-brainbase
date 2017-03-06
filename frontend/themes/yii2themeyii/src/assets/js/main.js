jQuery(document).ready(function () {
    //target
    //$('p a').attr('target', '_blank');

    //tooltip
	$('[data-toggle=tooltip]').tooltip({container: 'body'});

    //ajax
    $.ajaxSetup({
        dataType: 'json',
        type: 'POST',
        data: {_csrf: $('meta[name="csrf-token"]').attr('content')}
    });

    //online
    if($(window).width() < 1230) {
        $('.online').hide();
    } else {
        if($(window).height() - 200 < $('.online .panel-body').height()) {
            $('.online ul').addClass('nano-content').wrap('<div class="nano"></div>');
            $('.online .nano').height($(window).height() - 200).nanoScroller();
        } 
    }

    //back-to-top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    $('.back-to-top').click(function(e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 'slow');
    });

    //popover
    $(document).on('mouseenter', '[rel=author]', function(){
        var _this = this;
        setTimeout(function () {
            if($(_this).is(':hover')) {
                $(_this).popover({container: 'body', html: true, placement: 'auto right', content: '<i class="fa fa-4x fa-spinner fa-pulse"></i>'}).popover('show');
                $('.popover-content').load($(_this).attr('href'));
                $('.popover').on('mouseleave', function () {
                    $(_this).popover('destroy');
                });
            }
        }, 500);
	}).on('mouseleave', '[rel=author]', function () {
	    var _this = this;
	    setTimeout(function () {
	        if($('.popover').length && !$('.popover').is(':hover')) {
	            $(_this).popover('destroy');
	        }
	    }, 100);
	});


    //addtion
    $('.addition').click(function(){
        $('html,body').animate({ scrollTop: $('#answer').offset().top }, 'slow');
    });

    // registration
    $('.btn-registration').click(function() {
        var a = $(this);
        $.post('/registration', function(data) {
            if(data.status == -1) {
                $.modalLogin();
            } else if(data.status == 1) {
                a.html('<i class="fa fa-calendar-check-o"></i> 今日已签到<br />' + data.message).removeClass('btn-registration').addClass('disabled');
            } else {
                alert(data.message);
            }
        });
    });

    //follow
    $(document).on('click', '.follow', function() {
        var a = $(this);
        $.post('/follow', {id: a.attr('data-id')}, function(data) {
            if(data.status == -1) {
                $.modalLogin();
            } else if(data.status > 0) {
                if(a.hasClass('btn')) {
                    a.html('<i class="fa fa-check"></i> ' + data.message).addClass('disabled');
                } else {
                    a.replaceWith('<i class="fa fa-check"></i> ' + data.message);
                }
            } else {
                alert(data.message);
            }
        });
    });

    //favorite
	$('.favorite').on('click', function() {
        var a = $(this);
        var i = a.find('i');
        $.post('/favorite', {type: a.attr('data-type'), id: a.attr('data-id')}, function(data) {
            if(data.status == -1) {
                $.modalLogin();
            } else if(data.status == 1) {
                i.attr('class', 'fa fa-star');
                a.addClass('active');
                a.attr('data-original-title', data.message).tooltip('show').attr('data-original-title', '取消收藏');
                a.html(a.html().replace(/[\d]+/, data.count));
            } else if(data.status == 2) {
                if(typeof(a.attr('data-toggle')) == 'undefined') {
                    a.replaceWith('<i class="fa fa-check"></i> ' + '已取消');
                } else {
                    i.attr('class', 'fa fa-star-o');
                    a.removeClass('active');
                    a.attr('data-original-title', data.message).tooltip('show').attr('data-original-title', '收藏');
                    a.html(a.html().replace(/[\d]+/, data.count));
                }
            } else {
                alert(data.message);
            }
        });
    });

    //vote
    $(document).on('click', '.vote', function() {
        var a = $(this);
        var action = a.hasClass('up') ? 'up' : (a.hasClass('down') ? 'down' : null);
        if(!a.hasClass('active') && action) {
            $.post('/vote', {action: action, type: a.attr('data-type'), id: a.attr('data-id')}, function(data) {
                if(data.status == -1) {
                    $.modalLogin();
                } else if(data.status == 1) {
                    a.siblings().removeClass('active').find('i').attr('class', a.siblings().find('i').attr('class').replace(/thumbs-(up|down)/, 'thumbs-o-$1'));
                    a.addClass('active').find('i').attr('class', a.find('i').attr('class').replace('fa-thumbs-o', 'fa-thumbs'));
                    var u = a.parent().find('.up');
                    var d = a.parent().find('.down');
                    u.attr('data-original-title', '顶').html(u.html().replace(/[\d]+/, data.up));
                    if(d.length > 0) {
                        d.attr('data-original-title', '踩').html(d.html().replace(/[\d]+/, data.down));
                    }
                    a.attr('data-original-title', data.message).tooltip('show');
                } else {
                    alert(data.message);
                }
            });
        }
    });
    
    //report
    $(document).on('click', '.report', function() {
        var type = $(this).attr('data-type');
        var id = $(this).attr('data-id');
        $.post('/report', {type: type, id: id}, function(data) {
            if(data.status == -1) {
                $.modalLogin();
            } else if(data.status == 1) {
                alert(data.message);
            } else {
                alert(data.message);
            }
        });
    });

    //reply
    $(document).on('click', '.reply', function() {
        $('.reply-form').removeClass('hidden');
        $('.reply-form').appendTo($(this).parents('li > .media-body'));
        $('.reply-form').find('.parent_id').val($(this).parents('li').attr('data-key'));
        if($(this).parents('div.media').length > 0) {
            $('.reply-form').find('textarea').val('@' + $(this).closest('.media-body').find('[rel=author]').first().html() + ' ');
        } else {
            $('.reply-form').find('textarea').val('');
        }
    });

    //feed-reply
    $('.feed-reply').click(function(){
        $('#feed-content').val('@' + $(this).closest('.media-body').find('[rel=author]').first().html() + ' ');
        $('html,body').animate({ scrollTop: $('#replies').offset().top }, 'slow');
    });

    //draft
    $('.draft').click(function(){
        $('#post-status').val(0);
        $(this).parents('form').submit();
    });

    //modal
    jQuery.extend({
        modalLogin: function() {
            $('.modal-content').load('/login');
            $('.modal').modal();
        },
        modalLoad: function(url, data, callback) {
            $('.modal-content').load(url, data, callback);
            $('.modal').modal();
        },
        modalAlert: function(content) {
            $('.modal-title, .modal-body p, .modal-footer').remove();
            $('.modal-header').append('<h2 class="modal-title">友情提示</h2>');
            $('.modal-body').html('<p>' + content + '</p>');
            $('.modal-content').append('<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">确定</button></div>');
            $('.modal').modal();
        },
        modalConfirm: function(object) {
            $('.modal-title, .modal-body p, .modal-footer').remove();
            $('.modal-header').append('<h2 class="modal-title">请您确认</h2>');
            $('.modal-body').html('<p>' + object.attr('data-confirm') + '</p>');
            $('.modal-content').append('<div class="modal-footer"><a class="btn btn-primary" href="' + object.attr('href') + '" data-method="post">确定</a><button type="button" class="btn btn-default" data-dismiss="modal">取消</button></div>');
            $('.modal').modal();
        }
    });
    window.alert = $.modalAlert;
    $("[data-confirm]").click(function() {
        $.modalConfirm($(this));
        return false;
    });
    $(".modal").on("hidden.bs.modal", function() {
        $(this).removeData("bs.modal");
    });

    //emojify
    if(typeof emojify == 'object') {
        emojify.setConfig({img_dir:'/images/emoji'});
        emojify.run();
    }

    //gallery
    if(typeof blueimp == 'object') {
        $('body').append('<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls"><div class="slides"></div><h3 class="title"></h3><a class="prev">‹</a><a class="next">›</a><a class="close">×</a><a class="play-pause"></a><ol class="indicator"></ol></div>');
        $('p img').each(function(){
            var img_src = $(this).attr('src');
            var img_alt = $(this).attr('alt');
            var reg = /^\/uploads\/images\/\w/;
            if(reg.test(img_src)) {
                img_src = img_src.replace('_thumb.', '.');
            }
            $(this).wrap('<a href="' + img_src + '" title="' + img_alt + '" data-gallery></a>');
        });
    }
});
//baidu
//var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
//document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4a3af5cc318b92f2687be7ab6567a45c' type='text/javascript'%3E%3C/script%3E"));
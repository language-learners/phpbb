(function (window, $) {
    if (typeof (Storage) === "undefined") {
        console.log('no localstorage :(')
        return;
    }

    var _ = function (obj) {
        if (obj instanceof _) return obj;
        if (!(this instanceof _)) return new _(obj);
        this._wrapped = obj;
    };

    _.now = Date.now || function () {
        return new Date().getTime();
    };

    _throttle = function (func, wait, options) {
        var context, args, result;
        var timeout = null;
        var previous = 0;
        if (!options) options = {};
        var later = function () {
            previous = options.leading === false ? 0 : _.now();
            timeout = null;
            result = func.apply(context, args);
            if (!timeout) context = args = null;
        };
        return function () {
            var now = _.now();
            if (!previous && options.leading === false) previous = now;
            var remaining = wait - (now - previous);
            context = this;
            args = arguments;
            if (remaining <= 0 || remaining > wait) {
                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }
                previous = now;
                result = func.apply(context, args);
                if (!timeout) context = args = null;
            } else if (!timeout && options.trailing !== false) {
                timeout = setTimeout(later, remaining);
            }
            return result;
        };
    };

    $('#postform #message').on('keyup', _throttle(function () {
        try {
            var self = $(this);
            savePost(self.val());
        } catch (err) {
            console.log('unable to save post');
            console.log(err);
        }
    }, 500));

    function createKey() {
        var forumId = getParameterByName("f");
        var topicId = getParameterByName("t");

        if (forumId == "") forumId = 0;
        if (topicId == "") topicId = 0;

        return "post-" + forumId + "_" + topicId;
    }

    function savePost(text) {
        var key = createKey();

        var obj = {
            time: _.now(),
            text: text
        };

        localStorage.setItem(key, JSON.stringify(obj));
    };

    function clearPost() {
        var key = createKey();
        localStorage.removeItem(key);
    }

    function restorePost() {
        try {
            var element = $('#postform #message');
            
            if (element.length <= 0)
                return;

            var key = createKey();
            var json = localStorage.getItem(key);

            if (json == null) {
                return;
            }

            var obj = JSON.parse(json);

            if (obj.hasOwnProperty('text')) {
                element.val(obj.text);
            }
        } catch (err) {
            console.log('unable to restore post');
            console.log(err);
        }
    };

    function cleanupStorage() {
        try {
            var now = _.now();
            var expired = 1000 * 60 * 60 * 24 * 7;

            for (var i = 0; i < localStorage.length; i++) {
                var key = localStorage.key(i);

                if (key.slice(0, 5) === "post-") {
                    var json = localStorage.getItem(key);

                    if (json == null) {
                        return;
                    }

                    var obj = JSON.parse(json);

                    if (obj.hasOwnProperty('time')) {
                        var time = obj.time;

                        if (now - time > expired) {
                            localStorage.removeItem(key);
                        }
                    }
                }
            }
        } catch (err) {
            console.log('unable to clean up posts');
            console.log(err);
        }
    }

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    function addRestoreButton() {
        var element = $('#postform #format-buttons');

        if (element.length <= 0)
            return;

        var key = createKey();
        var json = localStorage.getItem(key);

        if (json == null) {
            return;
        }

        window.restorePost = restorePost;
        
        element.append('<input type="button" class="button2" value="Restore Post" onclick="window.restorePost()" title="restore saved post">');
    }

    $(function () {
        addRestoreButton();
        cleanupStorage();
    });
})(window, jQuery);
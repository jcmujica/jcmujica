
// index me indica de donde vengo

function menuCss(nextIndex) {
    switch (nextIndex) {
        case 1: $('.navbar-default .navbar-nav li').attr('id', 'none');
                $('#nav-home').focus();
                $('#nav-about').blur();
                $('#nav-projects').blur();
                $('#nav-blog').blur();
                $('#nav-contact').blur();
        break;
        case 2: $('.navbar-default .navbar-nav li').attr('id', 'bright');
                $('#nav-home').blur();
                $('#nav-about').focus();
                $('#nav-projects').blur();
                $('#nav-blog').blur();
                $('#nav-contact').blur();
        break;
        case 3: $('.navbar-default .navbar-nav li').attr('id', 'none');
                $('#nav-home').blur();
                $('#nav-about').blur();
                $('#nav-projects').focus();
                $('#nav-blog').blur();
                $('#nav-contact').blur();
        break;
        case 4: $('.navbar-default .navbar-nav li').attr('id', 'bright');
        $('#nav-home').blur();
                $('#nav-about').blur();
                $('#nav-projects').blur();
                $('#nav-blog').focus();
                $('#nav-contact').blur();
        break;
        case 5: $('.navbar-default .navbar-nav li').attr('id', 'none');
        $('#nav-home').blur();
                $('#nav-about').blur();
                $('#nav-projects').blur();
                $('#nav-blog').blur();
                $('#nav-contact').focus();
        break;
    }
}




var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };

    $(document).ready(function () {
        
    $('#pagepiling').pagepiling({
        menu: false,
        direction: 'vertical',
        verticalCentered: false,
        sectionsColor: ['#282828', '#FFF', '#282828', '#FFF', '#282828'],
        anchors: ['goto-home', 'goto-about', 'goto-projects', 'goto-blg', 'goto-cntct'],
        scrollingSpeed: 700,
        easing: 'swing',
        loopBottom: false,
        loopTop: false,
        css3: true,
        navigation: {
            'textColor': '#000',
            'bulletsColor': '#000',
            'position': 'right',
            'tooltips': ['Home', 'Acerca de', 'Proyectos', 'Blog', 'Contacto']
        },
        normalScrollElements: null,
        normalScrollElementTouchThreshold: 5,
        touchSensitivity: 5,
        keyboardScrolling: true,
        sectionSelector: '.section',
        animateAnchor: true,
        //events
        onLeave: function(index, nextIndex, direction){
            //after leaving section 2
            menuCss(nextIndex);
            



        },

    });



    
});
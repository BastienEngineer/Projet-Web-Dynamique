$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });

    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top-$("#nav").height()
            }, 1000);
            return false;
          }
        }
      });

});

function priseRDV(i, j, t, c) {
    if (t == 0 || t == 1) {
        document.getElementById('jour').innerHTML = 'Lundi';
    }
    if (t == 2 || t == 3) {
        document.getElementById('jour').innerHTML = 'Mardi';
    }
    if (t == 4 || t == 5) {
        document.getElementById('jour').innerHTML = 'Mercredi';
    }
    if (t == 6 || t == 7) {
        document.getElementById('jour').innerHTML = 'Jeudi';
    }
    if (t == 8 || t == 9) {
        document.getElementById('jour').innerHTML = 'Vendredi';
    }
    if (t == 10 || t == 11) {
        document.getElementById('jour').innerHTML = 'Samedi';
    }
    var ampm = t % 2;
    if (ampm == 0) {
        if (i == 0) {
            document.getElementById('horaire').innerHTML = '9h00';
        }
        if (i == 1) {
            document.getElementById('horaire').innerHTML = '9h20';
        }
        if (i == 2) {
            document.getElementById('horaire').innerHTML = '9h40';
        }
        if (i == 3) {
            document.getElementById('horaire').innerHTML = '10h00';
        }
        if (i == 4) {
            document.getElementById('horaire').innerHTML = '10h20';
        }
        if (i == 5) {
            document.getElementById('horaire').innerHTML = '10h40';
        }
        if (i == 6) {
            document.getElementById('horaire').innerHTML = '11h00';
        }
        if (i == 7) {
            document.getElementById('horaire').innerHTML = '11h20';
        }
        if (i == 8) {
            document.getElementById('horaire').innerHTML = '11h40';
        }
    }
    else {
        if (i == 0) {
            document.getElementById('horaire').innerHTML = '14h00';
        }
        if (i == 1) {
            document.getElementById('horaire').innerHTML = '14h20';
        }
        if (i == 2) {
            document.getElementById('horaire').innerHTML = '14h40';
        }
        if (i == 3) {
            document.getElementById('horaire').innerHTML = '15h00';
        }
        if (i == 4) {
            document.getElementById('horaire').innerHTML = '15h20';
        }
        if (i == 5) {
            document.getElementById('horaire').innerHTML = '15h40';
        }
        if (i == 6) {
            document.getElementById('horaire').innerHTML = '16h00';
        }
        if (i == 7) {
            document.getElementById('horaire').innerHTML = '16h20';
        }
        if (i == 8) {
            document.getElementById('horaire').innerHTML = '16h40';
        }
        if (i == 9) {
            document.getElementById('horaire').innerHTML = '17h00';
        }
        if (i == 10) {
            document.getElementById('horaire').innerHTML = '17h20';
        }
        if (i == 11) {
            document.getElementById('horaire').innerHTML = '17h40';
        }
        if (i == 12) {
            document.getElementById('horaire').innerHTML = '18h00';
        }
    }
    document.getElementById('ligne').value = i;
    document.getElementById('colonne').value = j;
    document.getElementById('c_id').value = c;
}
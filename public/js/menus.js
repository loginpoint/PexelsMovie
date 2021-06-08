function toggleModel(key,nav) {
    nav.toggleClass('active');
    key.toggleClass('active');
}
$('.menu-key').on({
    click: function() {
         toggleModel($(this),$('aside.side-nav'));
          if($('.search-key.active').length > 0) toggleModel($('.search-key.active'),$('.search.overlay'));
          $('.search-key.active').click();
    }
});

$('.search-key').on({
    click: function() {
         $('.search.overlay').fadeToggle();
         toggleModel($(this),$('.search.overlay'));
         if($('.menu-key.active').length > 0) toggleModel($('.menu-key.active'),$('aside.side-nav'));
    }
})
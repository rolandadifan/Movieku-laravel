
// owl carousel
var owl = $('#team-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    dots:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// content
$('#works-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:6,
            nav:false
        },
        1000:{
            items:8,
            nav:true,
            loop:false
        }
    }
})

// smooth scroll
var scroll = new SmoothScroll('a[href*="#"]');

// search
// $(document).ready(function(){
//     function fetch_movie_data(query = '')
//     {
//         $.ajax({
//             url: "{{route('list.search')}}",
//             method: 'GET',
//             data: {query},
//             dataType: 'json',
//             success:function(data)
//             {
//                 $('list-item').html(data);
//             }
//         });
//     }
// });
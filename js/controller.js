var app = angular.module('myApp', []);

app.controller('main', function( $scope, $http ){

    $scope.price = ' ';

    $scope.sources = [
        {
            src : ''
        },
        {
            src : ''
        },
        {
            src : ''
        },
        {
            src : ''
        },
    ]


    $scope.slider_text = ''

    // Инициализация постов для слайдера (создание функции)
    $scope.get_posts = function() {
        $http.get('http://citylake.kz/?json=get_category_posts&count=10&post_type=post&slug=%D0%B1%D0%B5%D0%B7-%D1%80%D1%83%D0%B1%D1%80%D0%B8%D0%BA%D0%B8')
            .then(function(value) {
                $scope.dates = value.data.posts;

                $scope.dates[0].active = 'date-active';
                console.log($scope.dates);
                //var post_reg = /src="(http:.{0,355}\..{1,4})"/g;
                //for (var i = 0; i < $scope.dates.length; i++){
                //    $scope.dates[i].post_images = $scope.dates[i].content.match(post_reg);
                //    for(var j = 0; j < $scope.dates[i].post_images.length; j++){
                //        $scope.dates[i].post_images[j] = $scope.dates[i].post_images[0].slice(5, -1);
                //    }
                //}

                for (var i = 0;  i < $scope.dates[0].attachments.length; i++){
                    $scope.sources[i].src = $scope.dates[0].attachments[i].url;
                }
                //$scope.sources[0].src = $scope.dates[0].post_images[0];
                //$scope.sources[1].src = $scope.dates[0].post_images[1];
                //$scope.sources[2].src = $scope.dates[0].post_images[2];
                //$scope.sources[3].src = $scope.dates[0].post_images[3];

                if($scope.dates[0].custom_fields.meta1_textfield[0])
                    $scope.slider_text = $scope.dates[0].custom_fields.meta1_textfield[0];


                $(window).on('load', function(){

                    $(".carousel_2").owlCarousel({
                        navigation : true,
                        slideSpeed : 300,
                        paginationSpeed : 400,
                        pagination: true,
                        navigationText: false,
                        singleItem: true
                    });
                });

            });
        $http.get('http://citylake.kz/?json=get_category_posts&count=10&post_type=post&slug=price').then(function (value) {
            $scope.price = value.data.posts[0].content;
        });

        $scope.date_click = function(argument) {
            var elem =  document.querySelector('.date-active'),
                this_elem = document.querySelectorAll('.date')[argument];

            if( elem != this_elem){
                elem.classList.remove('date-active');
                this_elem.classList.add('date-active');

                for (var i = 0; i < 4; i++){
                    $scope.sources[i].src = $scope.dates[argument].attachments[i].url;
                }

                $scope.slider_text = $scope.dates[argument].custom_fields.meta1_textfield[0];
            }
        }
    }
    // Инициализация постов для слайдера (вызов функции)
    $scope.get_posts();
})
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CYCM76YR88"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CYCM76YR88');
        gtag('set', 'user_properties', {

            Age: '25',

            Gender: 'Male',

            Language: 'en',

            Region: 'usa',

            Interests: 'game'

        });

        function sleep(milliseconds) {
            const date = Date.now();
            let currentDate = null;
            do {
                currentDate = Date.now();
            } while (currentDate - date < milliseconds);
        }

        function makeMail(length) {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            for ( var i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        function sendLog() {
            var access_code = Math.floor(Math.random() * (99999 - 1000) + 1000);
            var task = Math.floor(Math.random() * 5)+1;
            var p_id = Math.floor(Math.random() * 10);
            var e_id = ((Math.floor(Math.random() * 20))%2 === 0)? p_id : p_id + 10 ;
            var t_id = Math.floor(Math.random() * 33);

            var user = makeMail(5)+"@gmail.com";
            var partners = ["bashirian.lorenzo@gmail.com", "vdonnelly@barrows.com", "schaden.ramiro@hotmail.com","kuphal.ethyl@bechtelar.com"
                ,"bkuvalis@walter.org"
                ,"qpouros@moore.info"
                ,"nicholaus.mcglynn@collier.com"
                ,"lmoore@hotmail.com"
                ,"weimann.verna@effertz.com"
                ,"deangelo.torp@yahoo.com"
            ];
            var employees = ["robbie.thiel@hotmail.com"
                ,"fwitting@yahoo.com"
                ,"adan64@gmail.com"
                ,"cecil.lesch@hotmail.com"
                ,"damaris86@johns.net"
                ,"orval04@gmail.com"
                ,"jamir.kutch@yahoo.com"
                ,"garret81@yahoo.com"
                ,"quitzon.romaine@turner.com"
                ,"ward.jakayla@reinger.com"
                ,"padberg.audra@prosacco.com"
                ,"cdach@blanda.org"
                ,"wwolff@gmail.com"
                ,"norberto96@kuhlman.com"
                ,"nmorar@pfannerstill.info"
                ,"wdubuque@yahoo.com"
                ,"esmeralda.paucek@gmail.com"
                ,"august70@hotmail.com"
                ,"jhahn@yahoo.com"
                ,"acorkery@gmail.com"
                ,"apprkery@gmail.com"
            ];

            // var task_aCodes = [
            //     ["user923@gmail.com","bkuvalis@walter.org","damaris86@johns.net",1234567],
            //     ["user924@gmail.com","bkuvalis@walter.org","damaris86@johns.net",123457],
            //     ["user143@gmail.com","bkuvalis@walter.org","nmorar@pfannerstill.info",123467],
            //     ["user423@gmail.com","qpouros@moore.info","orval04@gmail.com",123567],
            //     ["user523@gmail.com","qpouros@moore.info","orval04@gmail.com",124567],
            //     ["user153@gmail.com","qpouros@moore.info","wdubuque@yahoo.com",134567],
            //     ["user125@gmail.com","nicholaus.mcglynn@collier.com","jamir.kutch@yahoo.com",234567],
            //     ["user173@gmail.com","lmoore@hotmail.com","garret81@yahoo.com",2234567],
            //     ["user723@gmail.com","deangelo.torp@yahoo.com","ward.jakayla@reinger.com",1434567],
            //
            // ];
            // gtag('set','user_properties',{
            //     consumer: userId,
            //     partner: partnerId,
            //     employee: employeeId,
            //     access_code: access_code,
            //     task: task
            // });



            gtag('event','new_users', {
                users : user,
                partners : partners[p_id],
                employees : employees[e_id],
                access_codes : access_code,
                is_code_changed : "no",
                new_user_count: 1
            });

            if(access_code%5 === 0)
            {
                var max = (access_code%3 ===0)?3:2;
                for(var i = 0 ; i<max;i++)
                {
                    gtag('event','task_activity', {
                        task_users: user,
                        task_id : task+i,
                        task_count: 1,
                        task_user_ACodes: access_code,
                        task_user_partners: partners[p_id],
                        task_user_employees: employees[e_id]

                    });
                    sleep(3000);
                }

            }else {
                gtag('event','task_activity', {
                    task_users: user,
                    task_id : task,
                    task_count: 1,
                    task_user_ACodes: access_code,
                    task_user_partners: partners[p_id],
                    task_user_employees: employees[e_id]

                });
            }




            //
            //
            // gtag('event','log_in_consumer', {
            //     consumer_id : userId,
            //     access_code : employeeId
            // });
            //
            // gtag('event','new_consumer_info', {
            //     consumer: userId,
            //     partner:partnerId,
            //     employee:employeeId,
            //     access_code:access_code
            // });
            //



            // test

            // gtag('event','test_test', {
            //     test : 1
            // });

            gtag('config', 'G-CYCM76YR88', {
                'user_id': user
            });

            console.log("send");
        }
    </script>


</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>

        </div>

        <br>
        <br>
        <div>
            <button onclick="sendLog()">Event Complete</button>
        </div>
    </div>
</div>

<!-- The core Firebase JS SDK is always required and must be listed first -->
{{--<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>--}}


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
{{--<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>--}}


<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    // var firebaseConfig = {
    //     apiKey: "AIzaSyCocHxMg6SQ2OpSZqbdwV4vUxElmhU48pw",
    //     authDomain: "fir-analytics-94ee9.firebaseapp.com",
    //     databaseURL: "https://fir-analytics-94ee9.firebaseio.com",
    //     projectId: "fir-analytics-94ee9",
    //     storageBucket: "fir-analytics-94ee9.appspot.com",
    //     messagingSenderId: "647928140123",
    //     appId: "1:647928140123:web:b7efbe8e17b7c104a1ca7e",
    //     measurementId: "G-XDRP6W3ZV5"
    // };
    // Initialize Firebase
    // firebase.initializeApp(firebaseConfig);
    // firebase.analytics();


    // function sendLog() {
    //
    //     var maxn = 9999;
    //     var minn = 1000;
    //     var userId = Math.floor(Math.random() * (maxn - minn) + minn);
    //     var employeeId = 1111;
    //     if((userId % 2) === 0)
    //     {
    //         employeeId = Math.floor(Math.random() * (maxn - minn) + minn);
    //     }
    //     var partnerId = 2222;
    //     if((employeeId % 2) === 0)
    //     {
    //         partnerId = Math.floor(Math.random() * (maxn - minn) + minn);
    //     }
    //
    //     gtag('set', 'user_properties', {
    //
    //         Age: '25',
    //
    //         Gender: 'Male',
    //
    //         Language: 'en',
    //
    //         Region: 'usa',
    //
    //         Interests: 'game'
    //
    //     });
    //
    //     var access_code = Math.floor(Math.random() * (maxn - minn) + minn);
    //     var task = Math.random(7);
    //
    //     gtag('set','user_properties',{
    //         consumer: userId,
    //         partner:partnerId,
    //         employee:employeeId,
    //         access_code:access_code,
    //         task:task
    //     });
    //
    //
    //
    //     // gtag('event', 'add_to_cart', {
    //     //     currency: 'CHI',
    //     //     items: "pant",
    //     //     value: 9.98,
    //     //     id: "P72345",
    //     //     name: " Warhol pant",
    //     //     brand:"Google pant",
    //     //     category: "pant",
    //     //     coupon: "SUMMER pant",
    //     //     price: 4.99,
    //     //     quantity: 2,
    //     //     variant: "gray"
    //     // });
    //
    //
    //
    //     gtag('event','new_consumer', {
    //         user_id : userId,
    //         employee_id : employeeId,
    //         partner_id : partnerId
    //     });
    //
    //
    //     gtag('event','log_in_consumer', {
    //         consumer_id : userId,
    //         access_code : employeeId
    //     });
    //
    //     gtag('event','new_consumer_info', {
    //         consumer: userId,
    //         partner:partnerId,
    //         employee:employeeId,
    //         access_code:access_code
    //     });
    //
    //     gtag('event','consumer_activity', {
    //         consumer: userId,
    //         consumer_id : userId,
    //         task: access_code,
    //         // task_user : {task: access_code, consumer_id:userId},
    //         task_user_info: "consumer-"+userId+" task-"+access_code
    //
    //     });
    //
    //
    //
    //
    //
    //     // firebase.analytics().logEvent('select_content', {
    //     //     items: [{name: 'Kittns'}],
    //     //     content_type: 'audio',
    //     //     content_id: 'P12453'
    //     // });
    //     //
    //     // firebase.analytics().logEvent('content_view', {
    //     //     content_id: 'P1253',
    //     //     content_author_name: 'kk ko',
    //     //     content_author_id: 'kk-123',
    //     //     content_type: 'tt',
    //     //
    //     // });
    //
    //
    //     console.log("send");
    // }


</script>

</body>
</html>

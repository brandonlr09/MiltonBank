@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <br><br>
            <p>Welcome to Milton Bank, your trusted partner in the digital banking era. At Milton Bank, we strive to provide
                you with secure, convenient, and innovative financial solutions that meet your ever-changing needs. With our
                cutting-edge technology and commitment to exceptional customer service, we are dedicated to making your
                banking experience seamless and rewarding.</p>

            <h1>Our Mission</h1>
            <p> At Milton Bank, our mission is to empower individuals and businesses with comprehensive banking services
                that enable them to achieve their financial goals. We aim to create a secure and accessible platform that
                simplifies banking processes, while maintaining the highest standards of privacy and security.</p>

            <h1>Your Trust is Our Priority</h1>
            <p>We understand that trust is the cornerstone of any successful banking relationship. That's why we have
                implemented robust security measures to safeguard your financial information and transactions. Your personal
                and financial data are protected using state-of-the-art encryption protocols, ensuring that your privacy is
                maintained at all times.</p>

            <h1>Convenience at Your Fingertips</h1>
            <p>With Milton Bank, banking has never been easier. Our user-friendly online platform and mobile banking app
                allow you to access your accounts anytime, anywhere. Whether you need to check your balance, transfer funds,
                pay bills, or manage your investments, our intuitive interface puts the power of banking right in your
                hands.</p>

            <h1>Exceptional Customer Service</h1>
            <p>At Milton Bank, we take pride in delivering exceptional customer service. Our dedicated team of banking
                professionals is always ready to assist you with any questions or concerns you may have. We are committed to
                providing prompt and reliable support, ensuring that you have a smooth and hassle-free banking experience.
            </p>

            <h1>Innovation and Growth</h1>
            <p>As the banking landscape evolves, we stay at the forefront of technological advancements to provide you with
                innovative solutions. We continuously enhance our services, incorporating new features and tools to meet the
                changing needs of our customers. By embracing innovation, we strive to offer you a banking experience that
                exceeds your expectations.
            </p>

            <h1>Innovation and Growth</h1>
            <p>As the banking landscape evolves, we stay at the forefront of technological advancements to provide you with
                innovative solutions. We continuously enhance our services, incorporating new features and tools to meet the
                changing needs of our customers. By embracing innovation, we strive to offer you a banking experience that
                exceeds your expectations.
            </p>

            <h1>Join Milton Bank Today</h1>
            <p>Experience the future of banking with Milton Bank. Sign up today and enjoy the convenience, security, and
                personalized service that sets us apart. Let us be your trusted financial partner as you embark on your
                journey towards financial success.
            </p>

            <p>Milton Bank - Your gateway to seamless banking in the digital age.</p>

            <br><br><br>

            <h1>Testimonials</h1>
            <br><br>
            <div class="container">

                <div class="container">
                    <h4 class="text-center pt-3">"This company has saved my life and my finances. I was contemplating ending
                        it all due to my poor financial situation and saw an ad for Milton Bank. So I called them, I had
                        nothing to lose. Not only did their friendly customer service actually talk me down, they also
                        brought me up... To a higher tax bracket. Thank you Milton Financial."</h4>

                    <h5 class="text-end">-Robert Miligan</h5>
                </div>

                <div class="container">
                    <h4 class="text-center pt-3">"I was in financial disarray. I mean after the Rush Hour movies and my
                        overwhelming back taxes, I was looking at jail time. Milton financial saved me from jail and made me
                        a bunch of money. Now I can still remain a millionaire. Whatchout now!"</h4>

                    <h5 class="text-end">-Chris Tucker - Star of Rush Hour2</h5>
                </div>

                <div class="container">
                    <h4 class="text-center pt-3">"On the advice of a few of my friends, I was lucky enough to be able to join
                        the Milton Financial family 3 years ago. Since then, my wife has left me and kicked me out of the
                        home I spent my life building. At least because of the wounderful investment tactics Milton
                        Financial uses. I can now confortably afford to pay for my insufferable ex-wife so she can now live
                        in what used to be my dream home with my kids whom i never get to see anymore and support her
                        deadbeat 20 year old boyfriend. THANKS MILTON!"</h4>

                    <h5 class="text-end">-Micheal Chicklis</h5>
                </div>
                <br><br><br>

                <h1>Milton Financial on TV</h1>
                <br><br>
                <div class="d-flex justify-content-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HX0fIi3H-es"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

            </div>

            @include('inc.footer')
        </div>
    </div>
@endsection

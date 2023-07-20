@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
    <main>

        @include('frontend.slider.slider')


        @include('frontend.contact.contact')


        @include('frontend.about.about')




        @include('frontend.services.services')





        @include('frontend.team.team')





        @include('frontend.gallery.gallery')





        @include('frontend.testimonial.testimonial')


        @include('frontend.appointment.appointment')


        @include('frontend.blogs.blogs')



    </main>
@endsection

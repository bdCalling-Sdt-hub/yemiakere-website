@extends('master')

@section('title')
    Training | Training
@endsection

@section('content')
    @if (Auth::check())
        <section class="training-intro">
            <h1>Training Programs</h1>
            <p>Welcome to our comprehensive training programs designed to enhance your cybersecurity skills. Whether you are a beginner or a professional, we have the right course for you.</p>
        </section>
        <section class="training-courses">
            <h2>Our Courses</h2>
            <div class="course">
                <h3>Introduction to Cybersecurity</h3>
                <p>This beginner course covers the basics of cybersecurity, including key concepts, threats, and protective measures.</p>
                <a href="{{ route('signup') }}" class="btn">Enroll Now</a>
            </div>
            <div class="course">
                <h3>Advanced Cyber Threats</h3>
                <p>Learn about advanced cyber threats, how to detect them, and the best practices to protect your systems.</p>
                <a href="{{ route('signup') }}" class="btn">Enroll Now</a>
            </div>
            <div class="course">
                <h3>Penetration Testing</h3>
                <p>This course will teach you the skills needed to conduct effective penetration testing and secure networks against attacks.</p>
                <a href="{{ route('signup') }}" class="btn">Enroll Now</a>
            </div>
        </section>
    @endif
@endsection


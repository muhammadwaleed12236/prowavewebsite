@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    @include('components.hero')

    <!-- 2. Featured Real Portfolio Showcase (Moved Up) -->
    @include('components.portfolio')

    <!-- 3. 10 Specialized Business Software & Manufacturing ERP Solutions -->
    @include('components.solutions')

    <!-- 4. Core Capabilities Services Section -->
    @include('components.services')

    <!-- 5. Technology Stack Matrix -->
    @include('components.tech-stack')

    <!-- 6. Interactive Project Scope Estimator -->
    @include('components.calculator')

    <!-- 7. Software Engineering Process Workflow -->
    @include('components.process')

    <!-- 8. Client Testimonials -->
    @include('components.testimonials')

    <!-- 9. Contact & Consultation -->
    @include('components.contact')
@endsection

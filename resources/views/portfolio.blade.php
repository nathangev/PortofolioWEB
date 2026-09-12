@extends('layouts.app')

@section('content')
    <!-- 00 // HERO: 3D Cyanotype Blueprint Scan & Leader Lines -->
    @include('components.hero')

    <!-- 01 // THE BRIDGE: Curricular Convergence Narrative -->
    @include('components.bridge')

    <!-- 02 // TOKO POS: Systems I've shipped (Bench Register) -->
    @include('components.toko')

    <!-- 03 // MBG LOGISTICS: National School Meal Routing (Hybrid Register) -->
    @include('components.mbg')

    <!-- 04 // LEAF CLASSIFIER: Foliar Pathology AI (Hybrid Register) -->
    @include('components.leaf')

    <!-- 05 // SIMKOST: Relational Database & UI Architecture (Bench Register) -->
    @include('components.simkost')

    <!-- 06 // RESEARCH: Clinical Nutrition Biomarker Study (Bench Register) -->
    @include('components.research')

    <!-- 07 // CONTACT: Direct Repositories & Inquiries (Blueprint Register) -->
    @include('components.contact')
@endsection

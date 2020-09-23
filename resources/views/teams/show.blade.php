@section('title')
    {{ config('app.name') }} - Perfil
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">{{ __('Team Settings ') }}</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Pagina Inicial</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ __('Team Settings') }}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @livewire('teams.update-team-name-form', ['team' => $team])

                @livewire('teams.team-member-manager', ['team' => $team])

                @if (Gate::check('delete', $team) && ! $team->personal_team)
                    <x-jet-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('teams.delete-team-form', ['team' => $team])
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection

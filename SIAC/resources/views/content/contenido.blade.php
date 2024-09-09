@extends('index')
@section('content')
    <template v-if="menu==1">
        <dashboard></dashboard>
    </template>
    
    <template v-if="menu==2">
        <tabla_proyectos></tabla_proyectos>
    </template>

    <template v-if="menu==3">
        <ppcal></ppcal>
    </template>

    <template v-if="menu==4">
        <revision></revision>
    </template>

    <template v-if="menu==5">
        <reportes></reportes>
    </template>

@endsection

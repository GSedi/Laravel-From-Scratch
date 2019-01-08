@component('mail::message')
# New Project {{$project->title}}

{{$project->description}}


@component('mail::button', ['url' => '/projects/'. $project->id ])
My Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

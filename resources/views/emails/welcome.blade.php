<!-- 
!
@component('mail::message')
Welcome to ArtisanAtlas
      
Name: {{ $mailData['name'] }}<br/>
Email: {{ $mailData['email'] }}
      
Thanks,<br/>
{{ config('app.name') }}
@endcomponent -->
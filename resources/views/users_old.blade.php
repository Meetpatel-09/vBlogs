<x-header componentName='User'/>
<h1>User Page</h1>
<h3>Current URL:- {{URL::current()}}</h3>
<h3>Full URL:- {{URL::full()}}</h3>
To go to About Page <a href="{{URL::to('/about')}}">click here</a>

<h3>Previous URL:- {{URL::previous()}}</h3>
<br />

{{--
@if ($user == "meet")
     <h1>Hello, {{$user}}</h1>
@elseif ($user == "prince")
     <h1>Hello, {{$user}}</h1>
@else
     <h1>Hello, Unknown</h1>
@endif
--}}

{{--
@for ($i=0; $i<10;$i++)
<h4>{{$i}}</h4>
@endfor
--}}

{{--
@foreach ($users as $user)
     <h6>{{$user}}</h6>
@endforeach
--}}

@csrf

@include('inner')
@foreach ($users as $user)
     <h6>{{$user}}</h6>
@endforeach
<!-- 
<script>
     // var data = @json($users);
     // console.warn(data);
</script> -->



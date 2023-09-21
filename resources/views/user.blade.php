<!-- //to use header file inside this file -->
<!-- <x-Header componentName = 'user' /> -->
<h1> User page </h1>
@include("inner");
@foreach ($users as user)
<h4> {{$user}} </h4>
@endforeach
<script>
    var data = @json($users)
    console.log(data);
</script>
 
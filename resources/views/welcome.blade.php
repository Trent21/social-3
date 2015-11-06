@extends('app')

@section('content')
<div class="container">
     
    <div id="addStatus">
        <form>
            <input type="text" v-model="newStatus.message" class="form-control">
            <input type="submit" v-on="click: submitStatus" class="btn form-control">
        </form>
    </div>
    <hr>
    <div id="feed">
        <div class="status" v-repeat="status: statuses">
            <p>@{{status.owner}} : @{{status.message}}</p>
            <hr />
        </div>
    </div>
</div>
@endsection
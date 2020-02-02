@extends('core.base::layouts.master')
@section('content')

  <div class="container">
  <h2>Place Google Ads </h2>
  <form action="{{ URL::to('ads/place/submit') }}" method='POST'>
  	@csrf 
    <div class="form-group">
      <label for="email">Google Ads</label>
      <textarea style=" border: 2px solid blue;"class="form-control" id="email" rows="10" placeholder="Enter you ads html code" name="ads"></textarea>
    </div>
    <div class="form-group">
      <label for="email"> Ads Position </label>
      <input style=" border: 2px solid blue;"class="form-control" id="email" placeholder="Enter your ads Position" name="position"></input>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
<br>
<br>
<div class="container">
  <h2>Ads Table </h2>
 </p>            
  <table class="table">
    <thead>
      <tr>
        <th style="color: green;">Ads</th>
        <th style="color: green;">Action</th>

      </tr>
    </thead>
    <tbody>
      <tr>
      	@foreach ($data as $element)
        <td>
        	<form action="{{ URL::to('/ads/place/edit')}}" method="POST">
        		@csrf 
        		 <textarea style=" border: 2px solid blue;"class="form-control" id="email" rows="10" placeholder="Enter you ads html code" name="ads">{{$element->ads }}</textarea>
        		<input type="hidden" name="id" value="{{$element->id }}">
        	
        </td>  
        <td><button type="submit" class="btn btn-success">Update</button></td>
     </form>
        	@endforeach
      </tr>
    </tbody>
  </table>
</div>

@endsection
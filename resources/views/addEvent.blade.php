@extends('dashboard')
@section('dashboard')
<div class="frame">
   <div class="addevent">
  <div class="container ">
    @if (session("error"))
    <div class="alert alert-danger">{{session()->get("error")}}</div>
    @endif
    <div class="col-12">
        <h2 class="mb-5">List of <span>Events</span></h2>
    </div>

    <form class="form" action="{{route('event.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <input name="event" class="input" type="text" value="{{old('event')}}" placeholder="Event Name">
                    @error('event')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <input name="responsable" class="input" type="text" value="{{old('responsable')}}" placeholder="Event Responsable">
                    @error('responsable')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <input type="date" class="input" placeholder="Event Day"  value="{{old('event_day')}}"  name="event_day">
                    @error('event_day')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
         
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    
                    <input name="time" class="input" type="time" value="{{old('time')}}" >
                    @error('time')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
            <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                    
                    <select name="guests" class="nice-select form-control wide">
                        <option value="" selected disabled>This Event For</option>
                        <option value="students">Students=>both</option> 
                        <option value="students">Students=>girls</option> 
                        <option value="students">Students=>boys</option>
                        <option value="teachers">Teachers</option>
                        <option value="all">All the school</option>
                    </select>
                    @error('guests')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label for="photo">Event Image</label><br>
                    <input name="photo" id="photo" type="file">
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                        
                        <select name="categorie"  class="nice-select form-control wide">
                            <option value="" selected disabled> Event Categories</option>
                            @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{ucfirst($categorie->categorie)}}</option>
                            @endforeach
                            
                            
                        </select>
                        @error('guests')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            <div class="col-lg-12 col-md-12 col-8">
                <div class="form-group">
                    <textarea name="message" placeholder="Write Your Description Here....."></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-4 col-12">
                <div class="form-group">
                    <div class="button">
                        <button type="submit" class="btn ">Add Event to the list </button>
                    </div>
                </div>
            </div>
          
        </div>
    </form>
  </div>
</div>
  </div>
@endsection
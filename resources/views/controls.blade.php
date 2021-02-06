@extends('layout')
@section('content')   

<div class="p-2 container-sm">
    
    
    
    <br/> <br/>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Device</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Light</td>
      <td><button type="button" class="btn btn-success" style="width:100px">ON</button></td>
      <td><button type="button" class="btn btn-success" style="width:100px">OFF</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Door</td>
      <td><button type="button" class="btn btn-success" style="width:100px">OPEN</button></td>
      <td><button type="button" class="btn btn-success" style="width:100px">CLOSE</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Fan</td>
      <td><button type="button" class="btn btn-success" style="width:100px">ON</button></td>
      <td><button type="button" class="btn btn-success" style="width:100px">OFF</button></td>
    </tr>
  </tbody>
</table>

<p>
The system contains a mobile application and an embedded system.

The Smart Home Mobile Application was developed using different technologies like Android Studio and Google Voice Recognition API.

The embedded system has many different components like Arduino UNO, light sensor, temperature sensor, motion sensor, smoke sensor, led, buzzer and a solenoid lock to control the different home appliances. We used Arduino IDE to write code for the Arduino UNO so that it can perform the needed functionalities.

The system uses Wifi module to send and receive messages from the mobile application and also for the status report of each home appliances.
</p>

<img
        src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
        class="d-block w-100"
        alt="..."
      />
</div>


@stop
@extends('layouts.app')

@section('content')
    



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-color">
                <!-- <div class="card-header ">Licence Key</div> -->

                <div class="card-body">
                  <h5 class="licence-head">Create Licence</h5> 
             
                  
                  <table>
                      <tr>
                        <td></td>
                        <td></td>
                      </tr>

                  </table>









                  <form class="licence-head"action="">
                    <label for="fname">Client Id</label>
                    <input class="card-input1" type="text" id="fname" name="fname"><br>
                    <label for="lname">Licence Key</label>
                    <input class="card-input" type="text" id="lname" name="lname"><br>
                    
                    <button type="button" class="card-button">Save </button><br>

                    <label for="cars">Choose a car:</label>
                    <select id="cars" name="carlist" form="carform">
                    
                        <option value="1">1</option>
                        <option value="6">6</option>
                        <option value="12">12</option>
                    </select>
                    <label for="cars">months</label><br>

                    <button type="button" >Create key </button><br>
                    <span>return to<a href="">Login</a>page</span>
                    
                    
                </form>


                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

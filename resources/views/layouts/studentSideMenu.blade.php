
<div class="col-md-3">
    <div class="card">
        <div class="card-header">Menu</div>
           <div class="card-body">
                <a href="">My Department</a>   
           </div>
           <div class="card-body">
                <a href="{{route('myclass',Auth::id())}}">My Class</a>   
           </div>
           <div class="card-body">
                <a href="{{route('myinfo',Auth::id())}}">My Info</a>   
           </div>
           <div class="card-body">
                <a href="">Fee & Dues</a>   
           </div>

    </div>
</div>
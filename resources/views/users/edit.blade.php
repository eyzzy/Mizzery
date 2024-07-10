<h1>User Edit</h1>
<p>This is the Edit page with id {{ $id }} </p>

<div class = "row" >
    <div class="col-6">
        <form action= "{{ url ('users')  }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="fullname" class="form-label">Fullname</label>
             <input type="text" name="fullname" id="fullname" class="form-control" /> 

         </div>
         <div class="form-group">
                <button class="btn btn-primary" type="submit" >Submit </button>
        </div>

        </form>

    </div>

</div>


<form action= "{{ url ('users')  }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Delete</button>
    </div>
</form>
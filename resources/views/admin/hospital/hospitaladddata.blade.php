


<form action="{{url('addhospital')}}" method="post">
    
<input type="text" name="hos_name" placeholder="hos_name">
<input type="text" name="hos_add" placeholder="hos_add">
<input type="text" name="hos_phone" placeholder="hos_phone" >
<input type="submit" value="ADD">
<br>


</form>

<form action="{{ url('updatehospital/'.$x->id) }}" method="put">
     
    <input type="number" name="id" placeholder="id">
    <input type="text" name="hos_name" placeholder="hos_name">
    <input type="text" name="hos_add" placeholder="hos_add">
    <input type="number" name="hos_phone" placeholder="hos_phone" >
    <input type="submit" value="EDIT">
</form>

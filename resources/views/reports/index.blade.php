<h2>Админка</h2>
<br><br>
{{-- <div style="display: flex; gap: 20px">
    <div>
        Z Z Z Z Z Z Z Z Z Z Z Z <br>
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ Z <br>
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Z  <br>  
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Z<br>  
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀Z<br>  
        ⠀⠀⠀⠀⠀⠀⠀Z<br>  
        ⠀⠀⠀⠀⠀Z<br>  
        ⠀⠀⠀Z<br>  
        ⠀Z<br>  
        Z Z Z Z Z Z Z Z Z Z Z Z 
    </div>
    <div>
        ⠀⠀⠀⠀O O O O O O O<BR>
        ⠀⠀O ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O <BR>
        ⠀O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        O⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O<BR>
        ⠀⠀O ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀O <BR>
        ⠀⠀⠀⠀O O O O O O O<BR>
    </div>
    <pre>
V                       V
 V                     V
  V                   V
   V                 V
    V               V
     V             V
      V           V
       V         V
        V       V
         V     V
          V   V
           V V
            V
    </pre>
</div> --}}



<br>
<br>
@foreach($reports as $report)
    <div class="reports-list; ;" style="display: flex; justify-content: space-between; margin-top: 10px; margin-inline: 100px; padding-inline:10px; border: 2px solid rgba(0, 0, 0, 0.226); border-radius: 10px; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.473)">
        <p>{{ $report->id }}</p>
        <p>{{ $report->address }}</p>
        <p>{{ $report->contact }}</p>
        <p>{{ $report->date }}</p>
        <p>{{ $report->service_id }}</p>
    </div>
@endforeach
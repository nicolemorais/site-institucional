 <!-- NOTIFICAÇÃO DE FORMULÁRIO NÃO PREENCHIDO CORRETAMENTE -->
 @if(count($errors) > 0)
 @if ($message = Session::get('errors'))
 <div class="alert alert-warning alert-dismissible fade show " style="background:rgb(255,126,27); color:black" role="alert">    
     <strong>Preencha as informações corretamente!</strong>
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif
 @endif


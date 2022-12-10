@csrf
                <div class="form-outline mb-4">
                    <input type="text" id="form4Example2" class="form-control" name="name" value="{{ $user->name ?? old('name')}}"/>
                    <label class="form-label text-black"  for="form4Example2">Nome Completo</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="email" id="form4Example1" class="form-control" name="email" value="{{ $user->email ?? old('name') }}"/>
                    <label class="form-label text-black" for="form4Example1">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password"  id="form1Example1" class="form-control" name="password"/>
                    <label class="form-label text-black" for="form1Example1">Senha</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="file"  id="form1Example1" class=" form-control" name="image"/>
                  </div>
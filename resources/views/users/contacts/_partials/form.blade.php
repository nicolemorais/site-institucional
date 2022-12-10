@csrf
<div class="form-outline mb-4">
    <input type="text" name="subject"  id="form4Example1" class="form-control" value="{{ $contact->subject ?? old('subject')}}"/>
    <label class="form-label text-black" pattern="[A-Za-z]{30}" for="form4Example1">Assunto</label>
</div>
<div class="form-outline mb-4">
    <textarea inputmode="text" name="body" class="form-control" id="form4Example3" rows="4" style="resize: none">{{ $contact->body ?? old('body') }}</textarea>
    <label class="form-label text-black" for="form4Example3">Mensagem / Proposta </label>
</div>
<div class="form-outline mb-4">
    <label for="visible"  style="font-family: 'Bebas Neue', cursive;">
        <input type="checkbox" name="visible" 
            @if (isset($contact) && $contact->visible)
                checked ="checked"
            @endif
        >
        Visível?
    </label>
</div>
<button type="submit" class="btn btn-block mb-4 " style="font-family: 'Bebas Neue', cursive; font-size: 1.4rem; color:white; background-color:rgba(5, 5, 5, 0.89)">
    Enviar
</button>
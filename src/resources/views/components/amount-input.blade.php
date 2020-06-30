<label class="animate__animated animate__fadeInUp">Amount
    <div class="input-group animate__animated animate__fadeIn{{$fadeDirection}}">
        <span class="input-group-label @if($errors->has($inputName)) alert-text @endif">#</span>
        <input name="{{$inputName}}" type="number" placeholder="Enter Amt" step="0.01" min="0" max="10000"
               value="{{ old($inputName) }}" class="input-group-field @if($errors->has($inputName)) invalid-input @endif"/>
    </div>
</label>

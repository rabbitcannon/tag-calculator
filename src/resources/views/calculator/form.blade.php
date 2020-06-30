@if($errors->any())
        <x-alert-message type="error" :errors="$errors->all()" />
@endif

@if($equation = Session::get('equation'))
    <x-alert-message type="result" :result="$equation" />
@endif


<form method="POST" action="/">
    @csrf

    <div class="grid-x grid-padding-x">

        <div class="medium-2 medium-offset-3 cell">
            <x-amount-input input-name="first_amount" fade-direction="Left" />
        </div>


        <div class="medium-2 cell">
            <label class="animate__animated animate__fadeInUp">Operand
                <select class="animate__animated animate__fadeIn
                    @if($errors->has('operator')) invalid-input alert-text @endif" name="operator">

                    <option value="null">-- Select One --</option>

                    @foreach($operators as $operator)
                        <option value={{ $operator->operator }}>
                            {{ $operator->name }} ({{ $operator->operator }})
                        </option>
                    @endforeach

                </select>
            </label>
        </div>

        <div class="medium-2 cell">
            <x-amount-input input-name="second_amount" fade-direction="Right" />
        </div>

    </div>

    <div class="grid-x grid-padding-x">
        <div id="button-container"  class="medium-12 text-center cell">
            <x-form-button type="submit" text="Calculate" fade-direction="Left" />
            <x-form-button type="reset" text="Clear Form" fade-direction="Right" />
        </div>
    </div>

</form>

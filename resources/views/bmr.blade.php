@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading">Basal metabolic rate</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/calcBmr') }}">
        {!! csrf_field() !!}
        <label class="Label">Gender</label>
        <label class="Label Label--radio">
            <input type="radio" name="coeff" value="88.36" class="Radio">
            Male
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="coeff" value="447.6" class="Radio">
            Female
        </label>
        <label class="Label">
            Height (meters):
            <input type="text" name="height" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Weight (kg):
            <input type="text" name="weight" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Age:
            <input type="text" name="age" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">Activity level</label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.2" class="Radio">
            Minimal 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.375" class="Radio">
            Low 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.55" class="Radio">
            Medium 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.725" class="Radio">
            High 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.9" class="Radio">
            Very high 
        </label>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__info">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quae, optio eveniet minima quidem dolorum eum! Repellendus tenetur ut nulla aut et, ipsa ad, nihil facere. Tenetur architecto atque quasi explicabo ex modi ullam, commodi culpa, debitis distinctio vitae, minima unde? Eos praesentium dolorem deserunt, nesciunt, officiis consequatur, reprehenderit consectetur mollitia atque inventore delectus. Autem, cupiditate ratione sapiente? Blanditiis iste laborum, ipsam quaerat rerum nisi velit nulla recusandae! A sed vitae dolorem earum officia aliquid odit rem ullam recusandae accusantium consequuntur cum modi ipsam odio laboriosam similique inventore culpa iure, aut. Ipsam temporibus sint ipsum modi laudantium eveniet asperiores, dolore.
    </div>
</div>
@stop

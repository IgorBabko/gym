@extends ('layout')

@section ('content')
<div class="Block Block--flex">
    {!! Breadcrumbs::render('water') !!}
    <h1 class="Block__heading">Water</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/water') }}">
        {!! csrf_field() !!}
        <label class="Label">Gender</label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="male" class="Radio">
            Male
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="female" class="Radio">
            Female
            <span class="Error"></span>
        </label>
        <label class="Label">
            Weight (kg):
            <input type="text" name="weight" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Physical activity (hours):
            <input type="text" name="physical-activity" class="Input">
            <span class="Error"></span>
        </label>
        <br>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__description">
        <h2><strong>How much should you drink every day?</strong></h2>
            Water is essential to good health, yet needs vary by individual. These guidelines can help ensure you drink enough fluids.<br>
            <h2><strong>How much water do you need?</strong></h2><br>

            Every day you lose water through your breath, perspiration, urine and bowel movements. <br>For your body to function properly, you must replenish its water supply by consuming beverages and foods that contain water.<br><br>

            So how much fluid does the average, healthy adult living in a temperate climate need? The Institute of Medicine determined that an adequate intake (AI) for men is roughly about 13 cups (3 liters) of total beverages a day. The AI for women is about 9 cups (2.2 liters) of total beverages a day.
    </div>
</div>
@stop

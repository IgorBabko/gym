@extends ('layout')

@section ('content')
<div class="Block Block--flex">
    <h1 class="Block__heading" style="text-align: center">Welcome to Ask a question section</h1>
    <form method="post" class="Form Form--question" action="{{ url('/questions') }}">
        <label class="Label">
            Name:
            <input type="text" name="name" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Email:
            <input type="email" name="email" class="Input">
            <span class="error"></span>
        </label>
        <p class="Label">Choose related topic:</p>
        <select>
          <option>Nutrition</option>
          <option>Diet</option>
          <option>Workout</option>
          <option>Metrix</option>
          <option>Learn</option>
          <option>Other</option>
        </select>
        <!--<label class="Label">Choose category:</label>-->
        <label class="Label">Question:</label>
        <textarea class="Textarea"></textarea>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Ask</button>
    </form>
    <div class="Block__description">
        <div class="Question">
            <h2 class="Question__title">Pay attention!</h2>
            <div class="Question_text">
            Before you start to write any question, please enter your email (we need your email to replay you) and make sure you choose the correct section, related to your question. In case, you did not find any section your question related to, just choose last section, called “other”. Good luck! </div>
        </div>
        
    </div>
</div>
@stop

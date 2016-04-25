@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading" style="text-align: center">Questions list</h1>
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
        <label class="label">Choose category:</label>
        <label class="label">question</label>
        <textarea class="Textarea"></textarea>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Ask</button>
    </form>
    <div class="Block__description">
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="Question">
            <h2 class="Question__title">niko bellic</h2>
            <div class="Question_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
        <div class="question">
            <h2 class="question__title">niko bellic</h2>
            <div class="question_text">lorem ipsum dolor sit amet, consectetur adipisicing elit. quam expedita reprehenderit natus dicta, quaerat cum dolorum voluptas facere consequatur atque.</div>
        </div>
    </div>
</div>
@stop

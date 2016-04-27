@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading" style="text-align: center">Support</h1>
    <form method="post" class="Form" action="{{ url('/support') }}">
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
        <label class="Label">Message</label>
        <textarea class="Textarea"></textarea>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Send</button>
    </form>
    <div class="Block__description">
        loremf josd fnldf kl jfldjfosdjfiojwe ne kj eljoj wnkew lkwne pwo poew ion welnl weieo wio joiw pwen ioewj ioj ijiwo joiwejio jiojew ioej oij iowejoi jojoijoijoijiojoidfiojio jdio   jd jfod jf djf odjf iodj jie fjoiwe fjiowefj io fjwe jiod jojdfoi djof 
    </div>
</div>
@stop

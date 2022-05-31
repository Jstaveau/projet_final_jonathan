<h1 class="text-center m-5">Mailbox</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        By
                    </th>
                    <th>
                        From
                    </th>
                    <th>
                        Message
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mails as $mail)
                    @if (!$mail->archived)
                        <tr class="{{ !$mail->readed ? 'bg-warning' : '' }}">
                            <td>
                                {{ $mail->id }}
                            </td>
                            <td>
                                {{ $mail->name }}
                            </td>
                            <td>
                                {{ $mail->mail }}
                            </td>
                            <td>
                                {{ substr($mail->message, 0, 70) }}...
                            </td>
                            <td class="d-flex h-100">
                                <a href="/mail/{{ $mail->id }}"><button data-text="read"
                                        class="submit-button me-2 submit-btn-2 button-one">read</button></a>
                                <form action="/mail/{{ $mail->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button data-text="archive mail" class="submit-button submit-btn-2 button-one"
                                        type="submit">
                                        archive mail
                                    </button>
                                </form>
                                <form class="ms-2" action="/mail/{{ $mail->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button data-text="delete" class="submit-button submit-btn-2 button-one"
                                        type="submit">
                                        delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <a href=""><button type="submit" data-text="archived mails" class="button-one submit-button mt-20">archived mails</button></a>
    </div>
</div>

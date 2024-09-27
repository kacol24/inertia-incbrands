<x-mail::message>
# Contact Form
<table style="text-align: left">
    <tr>
        <th>Name</th>
        <td>: {{ $form->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>: {{ $form->email }}</td>
    </tr>
    <tr>
        <th>Subject</th>
        <td>: {{ $form->subject }}</td>
    </tr>
</table>
<hr>
{!! nl2br($form->message) !!}
</x-mail::message>

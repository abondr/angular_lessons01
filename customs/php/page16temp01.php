<table class="table table-bordered">
    <tr>
        <th><strong>Sender</strong></th>
        <th><strong>Subject</strong></th>
        <th><strong>Date</strong></th>
    </tr>
    <tr ng-repeat='message in messages'>
        <td>{{message.sender}}</td>
        <td><a href='#!/view/{{message.id}}'>{{message.subject}}</td>
        <td>{{message.date}}</td>
    </tr>
</table>
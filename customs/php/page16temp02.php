<div><strong>Subject:</strong> {{message.subject}}</div>
<div><strong>Sender:</strong> {{message.sender}}</div>
<div><strong>Date:</strong> {{message.date}}</div>
<div>
    <strong>To:</strong>
    <span ng-repeat='recipient in message.recipients'>{{recipient}} </span>
    <div>{{message.message}}</div>
    <a href='#/'>Back to message list</a>
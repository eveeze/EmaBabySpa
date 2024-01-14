<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EmaBabySpa - Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #75C4F1;
            font-family: 'Roboto', sans-serif;
            padding-top: 20px;
            margin-bottom: 20px;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #FFFFFF;
        }

        .card {
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            position: relative;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .text-muted {
            font-size: 12px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #9AD1F7;
            border-radius: 4px;
            resize: vertical;
        }

        .btn-primary {
            background-color: #9AD1F7;
            border: 1px solid #9AD1F7;
        }

        .btn-primary:hover {
            background-color: #7CA4C9;
            border: 1px solid #7CA4C9;
        }

        .btn-danger {
            background-color: #DC3545;
            border: 1px solid #DC3545;
        }

        .btn-danger:hover {
            background-color: #BD2130;
            border: 1px solid #BD2130;
        }

        .btn-group {
            margin-top: 10px;
        }

        .btn-group .btn {
            margin-right: 5px;
        }

        @media (max-width: 576px) {
            body {
                padding-top: 10px;
            }
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <h2 class="text-light mb-4">Customer Comments</h2>

    @auth
    <form action="{{ route('add.comment') }}" method="post" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="content" class="text-light">Add Comment:</label>
            <textarea name="content" id="content" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @else
    <p class="text-light">Login to add comments.</p>
    @endauth

    @isset($comments)
    @forelse($comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text" id="commentText{{ $comment->id }}">{{ $comment->content }}</p>
                <small class="text-muted">Posted by: {{ $comment->user->name }} | {{ $comment->created_at->diffForHumans() }}</small>

                @auth
                @if(auth()->user()->id == $comment->user_id)
                    <div class="btn-group mt-2">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal{{ $comment->id }}">
                            Edit
                        </button>
                        <form action="{{ route('delete.comment', $comment->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>

                        <div class="modal fade" id="editModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $comment->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $comment->id }}">Edit Comment</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('edit.comment', $comment->id) }}" method="post" data-edit-route="{{ route('edit.comment', $comment->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="editedContent" class="text-light">Edited Content:</label>
                                                <textarea name="content" id="editedContent{{ $comment->id }}" class="form-control" rows="3">{{ $comment->content }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @endauth
            </div>
        </div>
    @empty
        <p class="text-light">No comments available.</p>
    @endforelse
    @endisset
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        function openEditModal(commentId) {
            $('#editModal' + commentId).modal('show');
        }

        $('form[data-edit-route]').submit(function (event) {
            event.preventDefault();
            var form = $(this);
            var url = form.data('edit-route');
            var method = form.find('input[name="_method"]').val() || 'POST';

            $.ajax({
                type: method,
                url: url,
                data: form.serialize(),
                success: function (response) {
                    console.log(response);
                    $('#commentText' + response.comment.id).text(response.comment.content);
                    $('#editModal' + response.comment.id).modal('hide');
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('[data-toggle="modal"]').on('click', function () {
            var target = $(this).data('target');
            $(target).modal('show');
        });

        $('.btn-edit').on('click', function () {
            var commentId = $(this).data('comment-id');
            openEditModal(commentId);
        });
    });
</script>

</body>
</html>

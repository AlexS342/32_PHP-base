<?php
// Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и
// text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче
// комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация,
// поэтому необходимо добавить соответствующее свойство и методы классу Task.

class Comment
{
    private User $author;
    private string $text;

    public function __construct(User $user, string $text)
    {
        $this->author = $user;
        $this->text = $text;
    }

    public function getAuthor () : User
    {
        return $this->author;
    }
    public function getText () : string
    {
        return $this->text;
    }
    public function getComment () : array
    {
        return [$this->author, $this->text];
    }
}
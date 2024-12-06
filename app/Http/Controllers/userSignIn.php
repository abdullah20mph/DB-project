
<?

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserSignInNotification extends Notification
{
    public function via($notifiable)
    {
        return ['mail', 'database']; // Send email and store notification in the database
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Sign-In Successful')
            ->line('You have successfully signed in.')
            ->action('View Dashboard', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'You have successfully signed in.',
            'url' => url('/'),
        ];
    }
}

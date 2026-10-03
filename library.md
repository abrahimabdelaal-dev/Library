
use App\Models\Book;

Book::with('author')->get()->map(fn($b) => [
    'title' => $b->title,
    'author' => $b->author?->name ?? 'Unknown author'
]);
----------------------
use App\Models\Author;

Author::withCount('books')->get()->map(fn($a) => [
    'author' => $a->name,
    'books_count' => $a->books_count
]);
--------------------
Author::find(1)->books()->latest()->get();
--------------------------
use App\Models\member;

member::with('card')->get()->map(fn($m) => [
    'member' => $m->name,
    'card_number' => $m->card?->card_number ?? 'No card'
]);
-----------------
member::whereHas('card', fn($q) => $q->where('expires_at', '<', now()))->first();

------------
Book::find(1)->genres->pluck('name');

-----------------
Book::whereHas('genres', fn($q) => $q->where('name', 'history'))->get();

---------
use App\Models\Book;
use Illuminate\Support\Facades\DB;

$book = Book::find(1);

// قبل الـ sync
DB::table('book_genres')->where('book_id', $book->id)->get();

// إجراء الـ sync وتحديث الربط
$book->genres()->sync([2, 3]);

// بعد الـ sync
DB::table('book_genres')->where('book_id', $book->id)->get();


---------
$author = Author::find(1);
$author->delete();

// معاينة كتبه بعد الحذف
Book::where('author_id', 1)->get();
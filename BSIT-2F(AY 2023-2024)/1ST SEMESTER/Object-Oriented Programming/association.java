class Book {
    private String title;

    public Book(String title) {
        this.title=title;
    }

    public String getTitle() {
        return title;
    }
}

class Library {
    private Book book;

    public void addBook(Book book) {
        this.book=book;
    }

    public void displayBook() {
        if (book !=null) {
            System.out.println("Book in the library: "+ book.getTitle());
        }

        else {
            System.out.println("No book in the library.");
        }
    }
}

public class association {
    public static void main(String[] args) {
        Book book1=new Book("The Catcher in the Rye ");
        Book book2=new Book("To Kill a Mockingbird ");

        Library library=new Library();

        library.addBook(book1);
        library.displayBook();

        library.addBook(book2);
        library.displayBook();
    }
}
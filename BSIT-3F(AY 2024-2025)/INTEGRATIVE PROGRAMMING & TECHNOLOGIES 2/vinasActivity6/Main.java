public class Main {
    public static void main(String[] args){
        Grade mid = new Midterm();
        mid = new RemarkGradeDecorator(mid);
        mid.compute();
        Grade tent = new TentativeFinalGrade();
        tent = new RemarkGradeDecorator(tent);
        tent.compute();
    }
}

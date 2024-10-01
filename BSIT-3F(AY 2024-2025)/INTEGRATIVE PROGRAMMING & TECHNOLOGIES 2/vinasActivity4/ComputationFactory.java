public class ComputationFactory {
    public Computation getComputation(String compt, double x, double y, double z){
        switch (compt) {
            case "midterm":
                return new Midterm(x,y,z);
            case "tentative":
                return new Tentative(x,y,z);
            // case "final":
            //     return new Finals(x,y,z);
            default:
                return null;
        }
    }
}
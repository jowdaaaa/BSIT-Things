public class BakedFactory {
    public Baked getBaked(String bakedType){
        switch (bakedType){
            case "Bread":
                return new Bread();
            case "Cake":
                return new Cake();
            case "Pastry":
                return new Pastry();
            default:
                return null;
        }
    }
}
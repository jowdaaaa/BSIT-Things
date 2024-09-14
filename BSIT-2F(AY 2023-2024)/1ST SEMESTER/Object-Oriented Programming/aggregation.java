class Engine {
    private String type;

    public Engine(String type) {
        this.type=type;
    }

    public String getEngineType() {
        return type;
    }
}

class Car {
    private String model;
    private Engine engine; // Aggregation

    public Car(String model, Engine engine) {
        this.model=model;
        this.engine=engine;
    }

    public String getCarDetails() {
        return "Model: "+model+"\nEngine Type: " +engine.getEngineType();
    }
}

public class aggregation {
    public static void main(String[] args) {
        Engine carEngine=new Engine("V6");
        Car myCar=new Car("Sedan", carEngine);

        System.out.println(myCar.getCarDetails());
        // Output “Sedan, V6”)

        System.out.println(carEngine.getEngineType());

        //Output “v6”

    }
}
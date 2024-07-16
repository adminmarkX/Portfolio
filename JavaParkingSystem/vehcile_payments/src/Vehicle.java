public class Vehicle {
    private int cc;
    private String model;
    private int year;

    // getter and setters
    public int getCc() {
        return cc;
    }

    public void setCc(int cc) {
        this.cc = cc;
    }

    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }

    public int getYear() {
        return year;
    }

    public void setYear(int year) {
        this.year = year;
    }

    // constructors
    public Vehicle(int cc,String model,int year){
        this.cc = cc;
        this.model = model;
        this.year = year;
    }



}

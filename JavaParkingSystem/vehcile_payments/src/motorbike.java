public class motorbike extends Vehicle implements tax{
    private int pay;

    public motorbike (int cc,String model,int year){
        super(cc,model,year);
    }


    @Override
    public int calculate () {
        if (getCc() < 125) {
            this.pay = 20;
        } else if (getCc() >= 125 && getCc() < 400) {
            this.pay = 40;
        } else if (getCc() >= 400 && getCc() < 600) {
            this.pay = 60;
        } else {
            this.pay = 80;
        }
        return this.pay;
    }
}

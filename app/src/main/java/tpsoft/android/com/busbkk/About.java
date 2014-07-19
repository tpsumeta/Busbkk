package tpsoft.android.com.busbkk;

import android.app.Activity;
import android.os.Bundle;
import android.view.Gravity;
import android.widget.TextView;

public class About extends Activity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.about);

        TextView t1 = (TextView) findViewById(R.id.textView2);
        t1.setGravity(Gravity.CENTER);

    }
}
